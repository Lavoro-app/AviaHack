import pandas as pd

a = []
qw = pd.read_excel("/content/вопрос.xlsx")
b = input().lower()
b = b.replace(',', '').replace('?','').replace('.','').replace('-','').replace('_','').replace('/','').replace('!','').replace("'",'').replace(" as ",' ').replace(" a ",' ').replace(" the ",' ').replace(" in ",' ').replace(" are ",' ').replace(" am ",' ').replace(" i ",' ').replace(" for ",' ').replace(" of ",' ').replace(" that ",' ').split()
for x in range(338):
   s = qw["question"][x]
   s = s.replace(',', '').replace('?','').replace('.','').replace('-','').replace('_','').replace('/','').replace('!','').replace("'",'').replace("as",' ').replace(" a ",' ').replace(" the ",' ').replace(" in ",' ').replace(" are ",' ').replace(" am ",' ').replace(" I ",' ').replace(" for ",' ').replace(" of ",' ').replace(" that ",' ').split()
   c = 0
   for i in range(len(s)):
      for j in range(len(b)):
         if s[i] == b[j]:
            c += 1    
   a.append(c)
ma = -1
z = -1
for i in range(338):
   if a[i] > ma:
      ma = a[i]
      z = i
oggg = qw["query"][z])





import pyodbc
server = '<server>.database.windows.net'
database = '<database>'
username = '<username>'
password = '<password>'   
driver= '{ODBC Driver 17 for SQL Server}'

with pyodbc.connect('DRIVER='+driver+';SERVER='+server+';PORT=1433;DATABASE='+database+';UID='+username+';PWD='+ password) as conn:
    with conn.cursor() as cursor:
        cursor.execute(oggg)
        row = cursor.fetchone()
        while row:
            print (str(row[0]) + " " + str(row[1]))
            row = cursor.fetchone()
