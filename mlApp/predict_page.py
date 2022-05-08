from dataclasses import dataclass
from shutil import register_unpack_format
import string
import streamlit as st
import pickle
import numpy as np


def load_model():
    with open('saved_steps.pkl', 'rb') as file:
        data = pickle.load(file)
    return data

data = load_model()

regressor = data["model"]
le_country = data["le_country"]
le_education = data["le_education"]

def show_predict_page():
    st.title("Software Developer Salary Prediction")
    st.write("""### We need some information to predict the salary""")

    my_parameters = params()
    calcSalary(my_parameters[0], my_parameters[1], my_parameters[2])

def params():
    countries = {                                                 
    "United States of America",                               
    "India",                                                    
    "Germany",                                                  
    "United Kingdom of Great Britain and Northern Ireland",     
    "Canada",                                                  
    "France",                                                   
    "Brazil",                                                   
    "Spain",                                                    
    "Netherlands",                                               
    "Australia",                                                
    "Poland",                                                    
    "Italy",                                                     
    "Russian Federation",                                        
    "Sweden",                                                    
    "Turkey",                                                    
    "Switzerland",                                               
    "Israel",                                                    
    "Norway",                                                   
    }


    education = {
        "Master’s degree", 
        "Bachelor’s degree", 
        "Post grad",
        "Less than a Bachelors",
    }
    country = st.selectbox("Country", countries)
    education = st.selectbox("Education Level", education)
    experience = st.slider("Years of Experience", 0, 50, 3)

    return [country, education, experience]

def calcSalary(country, education, experience):
    ok = st.button("Calculate Salary")
    if ok:
        X = np.array([[country, education, experience]])
        X[:, 0] = le_country.transform(X[:,0])
        X[:, 0] = le_education.transform(X[:,1])
        X = X.astype(string)

        salary = regressor.predict(X)
        st.markdown(f"The estimated annual salary is ${salary[0]:.2f}")



    






