import mysql.connector

conn=mysql.connector.connect(host='localhost',user='root',passwd='',db='sams')
cursor=conn.cursor()

def PrepareAttendance(date, subject, strength):
    add_record = ("INSERT INTO attendance "
               "(rollno,date,subject,att) "
               "VALUES (%s, %s, %s, %s)")
    strength = strength+1
    for x in range(1,strength):
        data_record = (x, date, str(subject), '0')
        cursor.execute(add_record, data_record)
    conn.commit()
    
def MarkAttendance(id, date, subject):
    add_record = ("UPDATE attendance SET att='1' WHERE rollno='"+str(id)+"' AND date='"+str(date)+"' AND subject='"+str(subject)+"'")
    cursor.execute(add_record)
    conn.commit()

def AckAttendance(date, subject):
    sql1 = ("SELECT COUNT(*) FROM "+str(subject)+" WHERE date = %s AND att = %s")
    cursor.execute(sql1, (date, '0'))
    x=cursor.fetchone()
    absent=x[0]
    cursor.execute(sql1, (date, '1'))
    x=cursor.fetchone()
    present=x[0]
    return str(present), str(absent)
'''WHERE date=%s AND att=%s;
cursor.execute(sql1,(str(date), 0))
cursor.execute(sql1,(str(date), 1))

'''
