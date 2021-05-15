from flask import render_template,request
from flask import redirect,url_for
import os
from app.utils import pipeline_model 
from PIL import Image
def base():
  return render_template('base.html')
  
def index():
  return render_template('index.html')  
  
  
def faceapp():
  return render_template('faceapp.html') 


def gender():
  if request.method =='POST':
    f=request.files['image']
    path=os.path.join('static/uploads/',f.filename)
    f.save(path)
    print('file saved successfully : ',f.filename)
    pipeline_model(path,f.filename,color='bgr')
    return render_template('gender.html',upload=True,img_name=f.filename)
  
  return render_template('gender.html',upload=False)  