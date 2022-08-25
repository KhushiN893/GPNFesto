from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
import smtplib
import sys
server = smtplib.SMTP_SSL("smtp.gmail.com", 465)
msg = MIMEText("""body""")
msg1 = sys.argv[1]
msg2 = msg1.split(',')
msg3 = ' '.join(msg2)
server.login("gpnfesto2022@gmail.com", "cdxbvhojlfrjblnl")
server.sendmail("gpnfesto2022@gmail.com", "khushi03.it@gmail.com", msg3)
server.quit()
