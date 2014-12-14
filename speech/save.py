import os
from selenium import webdriver

chromedriver = "C:\Python27\chromedriver_win32\chromedriver.exe"
os.environ["webdriver.chrome.driver"] = chromedriver
driver = webdriver.Chrome(chromedriver)
driver.get("http://www.google.com/intl/en/chrome/demos/speech.html")


driver.find_element_by_xpath('//*[@id="start_button"]').click()
