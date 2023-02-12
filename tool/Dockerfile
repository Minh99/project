# Use an official Python runtime as the base image
FROM python:3.9-alpine

# Set the working directory
ADD . /app
WORKDIR /app

# Install Flask and its dependencies
COPY requirements.txt ./requirements.txt
RUN python -m pip install --upgrade pip
RUN pip install -r ./requirements.txt

# Copy the local code to the container
COPY . .

# Specify the command to run the application
CMD ["python", "app.py"]
