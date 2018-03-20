from bs4 import BeautifulSoup
import requests
import csv
 


source = requests.get('http://time.com/').text

soup = BeautifulSoup(source,'lxml')

article = soup.find('div',class_='articles')
csv_file = open('cms_scrap.csv','w')
csv_writer = csv.writer(csv_file)
csv_writer.writerow(['headline','paragraph','link'])

#print(article.prettify()) 
i=0


for article in soup.find_all('article'):
    headline = article.h2.a.text
    link = article.h2.a['href']
   # print(headline)
    paragraph = article.p.text
   # print(paragraph)
   # print(link)
    csv_writer.writerow([headline,paragraph,link])
    i=i+1
    if i>6:
       break

csv_file.close()

