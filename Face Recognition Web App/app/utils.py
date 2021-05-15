import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import sklearn
import pickle
import cv2
from PIL import Image

# load all the models
haar = cv2.CascadeClassifier('./model/haarcascade_frontalface_default.xml')

mean  = pickle.load(open('./model/mean_preprocess.pickle','rb'))
model_svm  = pickle.load(open('./model/model_svm.pickle','rb'))
model_pca  = pickle.load(open('./model/pca_50.pickle','rb'))


gender_pre = ['Male','Female']
font = cv2.FONT_HERSHEY_SIMPLEX
color = 'bgr'



def pipeline_model(path,filename,color='bgr'):
   
    img = cv2.imread(path) 
    
    if color == 'bgr':
        gray = cv2.cvtColor(img,cv2.COLOR_BGR2GRAY)
    else:
        gray = cv2.cvtColor(img,cv2.COLOR_RGB2GRAY)
   
    faces = haar.detectMultiScale(gray,1.5,3)
    
    for x,y,w,h in faces:
        cv2.rectangle(img,(x,y),(x+w,y+h),(0,255,0),2) # drawing rectangle
        
        roi = gray[y:y+h,x:x+w] # crop image
        
        roi = roi / 255.0
        
        if roi.shape[1] > 100:
            roi_resize = cv2.resize(roi,(100,100),cv2.INTER_AREA)
        else:
            roi_resize = cv2.resize(roi,(100,100),cv2.INTER_CUBIC)
       
       # Flattening (1x10000)
        roi_reshape = roi_resize.reshape(1,10000) 
        
        roi_mean = roi_reshape - mean
        #  get eigen image
        
        eigen_image = model_pca.transform(roi_mean)
        #pass to ml model (svm)
        
        results = model_svm.predict_proba(eigen_image)[0]
        
        predict = results.argmax()
        
        score = results[predict]
        
        text = "%s : %0.2f"%(gender_pre[predict],score)
        
        cv2.putText(img,text,(x,y),font,1,(0,255,0),2)
    
    cv2.imwrite('./static/predict/{}'.format(filename),img)