import crawl
import mysql.connector
# from flask import Flask

# app = Flask(__name__)
# app.run(host="0.0.0.0", debug=True)

# @app.route('/')
# def hello():
#     crawl.run()


# Insert data into a table
mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="bocao"
)

def insert():
    # Create a cursor object to execute queries
    mycursor = mydb.cursor()
    
    sql = "INSERT INTO customers (name, email) VALUES (%s, %s)"
    val = ("John", "john@example.com")
    mycursor.execute(sql, val)
    mydb.commit()
    print(mycursor.rowcount, "record inserted.")

def get_doanh_nghiep():
    mycursor = mydb.cursor()
    # mycursor.execute("SELECT * FROM doanh_nghieps")
    mycursor.execute("SELECT * FROM categories")
    myresult = mycursor.fetchall()
    for x in myresult:
        print(x[1])

if __name__ == "__main__":
    print("Hello ===============")
    # data = crawl.run()
    get_doanh_nghiep()    
   
