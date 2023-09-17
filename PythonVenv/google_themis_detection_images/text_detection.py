import io
import os
import requests
from google.cloud import vision_v1

credential_path = "C:/Users/19549/Documents/PythonVenv/google_themis_detection_images/credentials.json"
os.environ['GOOGLE_APPLICATION_CREDENTIALS'] = credential_path
# Create a Vision API client
client = vision_v1.ImageAnnotatorClient()

# URL of the image containing text to analyze
image_url = 'https://media.gcflearnfree.org/content/55e075127dd48174331f5212_01_17_2014/basics_message_pane.png'

# Download the image from the URL
response = requests.get(image_url)
image_content = response.content

# Create an image object
image = vision_v1.Image(content=image_content)

# Perform text detection
response = client.text_detection(image=image)
text_annotations = response.text_annotations

# Extract and print the detected text
#for annotation in text_annotations:
 #   print(annotation.description)

print(text_annotations[0].description)
