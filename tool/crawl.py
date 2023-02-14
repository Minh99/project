import os
import shutil
from webbrowser import get
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
import requests
from time import sleep
from selenium.webdriver.common.by import By
from selenium.common.exceptions import StaleElementReferenceException

data = []

def initDriverProfile():
    CHROME_DRIVER_PATH = './chromedriver'
    WINDOW_SIZE = "1000,1000"
    chrome_options = Options()
    # chrome_options.add_argument("--headless")
    chrome_options.add_argument("--start-maximized")
    # chrome_options.add_argument("--window-size=%s" % WINDOW_SIZE)
    chrome_options.add_argument('--no-sandbox')
    chrome_options.add_argument('disable-infobars')
    chrome_options.add_argument(
        '--disable-gpu') if os.name == 'nt' else None  # Windows workaround
    chrome_options.add_argument("--verbose")
    chrome_options.add_argument("--no-default-browser-check")
    chrome_options.add_argument("--ignore-ssl-errors")
    chrome_options.add_argument("--allow-running-insecure-content")
    chrome_options.add_argument("--disable-web-security")
    chrome_options.add_argument(
        "--disable-feature=IsolateOrigins,site-per-process")
    chrome_options.add_argument("--no-first-run")
    chrome_options.add_argument("--disable-notifications")
    chrome_options.add_argument("--disable-dev-shm-usage")
    chrome_options.add_argument("--disable-translate")
    chrome_options.add_argument("--ignore-certificate-error-spki-list")
    chrome_options.add_argument("--ignore-certificate-errors")
    chrome_options.add_argument(
        "--disable-blink-features=AutomationControllered")
    chrome_options.add_experimental_option('useAutomationExtension', False)
    prefs = {"profile.default_content_setting_values.notifications": 2}
    chrome_options.add_experimental_option("prefs", prefs)
    # open Browser in maximized mode
    chrome_options.add_argument("--start-maximized")
    # overcome limited resource problems
    chrome_options.add_argument("--disable-dev-shm-usage")
    chrome_options.add_experimental_option(
        "excludeSwitches", ["enable-automation"])
    chrome_options.add_experimental_option(
        'excludeSwitches', ['enable-logging'])
    # chrome_options.add_experimental_option("prefs", {"profile.managed_default_content_settings.images": 2})
    # chrome_options.add_argument('disable-infobars')

    driver = webdriver.Chrome(executable_path=CHROME_DRIVER_PATH, options=chrome_options)

    return driver


def crawlContent(driver, xpath):
    urlPage = 'https://bocaodientu.dkkd.gov.vn/egazette/Forms/Egazette/DefaultAnnouncements.aspx'
    driver.get(urlPage)

    if len(xpath):
        driver.find_elements(By.XPATH, xpath)[0].click()

    # div = driver.find_elements(By.CLASS_NAME, 'EGZDefault-List-Info-List')
    # table = div[0].find_element(By.ID, 'ctl00_C_CtlList')
    # tbody = table.find_element(By.TAG_NAME, 'tbody')
    currentPage = 1
    done = False

    while True:
        driver.refresh()
        sleep(2)
        if currentPage == 3:
            break
        try:
            footer = driver.find_element(By.CSS_SELECTOR, "#footer")
            driver.execute_script("arguments[0].remove();", footer)

            newTab = driver.find_element(By.CSS_SELECTOR, "#newTab")
            driver.execute_script("arguments[0].remove();", newTab)

            ipcc_chat_iframe = driver.find_element(
                By.CSS_SELECTOR, "#ipcc_chat_iframe")
            driver.execute_script("arguments[0].remove();", ipcc_chat_iframe)

            table = driver.find_elements(By.XPATH, "//table")[0]
            tbody = table.find_elements(By.TAG_NAME, "tbody")
            rows = tbody[0].find_elements(By.TAG_NAME, "tr")

            for row in rows:
                cells = row.find_elements(By.TAG_NAME, "td")
                print("=============")
                contents = []
                for cell in cells:
                    contents.append(cell.text)
                    # print(cell.text)
                    # writeFileTxt('test.csv', cell.text)
                data.append(contents)
                # print(data)

                if (row.get_attribute("class") == "Pager"):
                    tablePage = driver.find_elements(By.XPATH, "//table")[1]
                    tbodyPage = tablePage.find_elements(By.TAG_NAME, "tbody")
                    rowsPage = tbodyPage[0].find_elements(By.TAG_NAME, "tr")
                    for tr in rowsPage:
                        cellsPage = tr.find_elements(By.TAG_NAME, "td")
                        pageValid = False
                        for i, td in enumerate(cellsPage):
                            if td.find_elements(By.TAG_NAME, 'span'):
                                pageValid = True
                            else:
                                continue

                            print(pageValid)
                            print('PAGE: ', currentPage)

                            if i + 1 < len(cellsPage) and pageValid:
                                next_td = cellsPage[i + 1]
                                currentPage = currentPage + 1
                                print("MOVE TO PAGE: ", currentPage)
                                try:
                                    next_td.find_elements(By.TAG_NAME, 'a')[
                                        0].click()
                                except:
                                    done = True
                                    break
                            else:
                                print('Done')
                                done = True
                                break
                if done:
                    break
        except StaleElementReferenceException:
            pass

    return data


def writeFileTxt(fileName, content):
    with open(fileName, 'a', encoding='utf-8') as f1:
        f1.write(content + os.linesep)


def download_file(url, localFileNameParam="", idPost="123456", pathName="/data/"):
    try:
        local_filename = url.split('/')[-1]
        if local_filename:
            local_filename = localFileNameParam
        with requests.get(url, stream=True) as r:
            pathImage = os.getcwd() + pathName + str(idPost)

            if (os.path.exists(pathImage) == False):
                os.mkdir(pathImage)

            with open(os.path.join(pathImage, local_filename), 'wb') as f:
                r.raw.decode_content = True
                shutil.copyfileobj(r.raw, f)
    except:
        print("download file err")


def run():
    options = webdriver.ChromeOptions()
    options.add_argument("--headless")
    options.add_argument("--start-maximized")
    options.add_experimental_option('excludeSwitches', ['enable-logging', 'enable-automation'])
    driver = webdriver.Chrome(options=options)
    categories = ['']
    for category in categories:
        crawlContent(driver, category)
    driver.quit()
    return data
    
