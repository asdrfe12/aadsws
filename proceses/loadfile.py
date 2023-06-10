import MySQLdb
import pandas as pd
import argparse

parser = argparse.ArgumentParser()
parser.add_argument("-userId", "--userId", type=int)

args = parser.parse_args()
id = args.userId

#Setting up connection
db = MySQLdb.connect("localhost", 'root', '', 'ddac')

cursor = db.cursor()

sql = """SELECT * FROM files where userId=""" + str(id)

try:
   cursor.execute(sql)
   db.commit()
   i=0
   for row in cursor.fetchall() :
      import matplotlib.pyplot as plt
      
      fid = row[0]
      data = pd.read_csv("../upload/"+row[2])

      maxvalue = data.iloc[data['Sales'].idxmax()]
      minvalue = data.iloc[data['Sales'].idxmin()]

      salesinmonths = data['Sales'].to_list()
      allsales = ""
      for sales in salesinmonths :
         allsales = allsales + str(sales) + "_"

      plt.plot(data['Month'], data['Sales'])
      plt.title('Line Graph')
      plt.xlabel('X-axis')
      plt.ylabel('Y-axis')
      plt.savefig("../images/line"+str(i)+".png", bbox_inches='tight')


      plt.bar(data['Month'], data['Sales'])
      plt.title('Bar Graph')
      plt.xlabel('X-axis')
      plt.ylabel('Y-axis')
      plt.savefig("../images/bar"+str(i)+".png", bbox_inches='tight')


      plt.pie(data['Sales'], labels=data['Month'])
      plt.title('Pie Chart')
      plt.savefig("../images/pie"+str(i)+".png", bbox_inches='tight')


      plt.scatter(data['Month'], data['Sales'])
      plt.title('Scatter Plot')
      plt.xlabel('X-axis')
      plt.ylabel('Y-axis')
      plt.savefig("../images/scatter"+str(i)+".png", bbox_inches='tight')
      i+=1

      
      print(str(fid) + " " + str(maxvalue['Month']) + " " + str(maxvalue['Sales']) + " " + str(minvalue['Month']) + " " + str(minvalue['Sales']) + " " + str(allsales))
      sql1 = """UPDATE files set mostselling = """+str(maxvalue['Month'])+""" , mostselling_pieces = """+str(maxvalue['Sales'])+""" , minselling = """+str(minvalue['Month'])+""" , minselling_pieces = """+str(minvalue['Sales'])+""" where id = """ + str(fid) + """"""
      # cursor1 = db.cursor()
      try:
         cursor.execute(sql1)
         db.commit()
      except:
         db.rollback()
      
except:
   db.rollback()