import gspread
gc = gspread.service_account(filename='myj.json')
sh = gc.open_by_key('1dq4nSWBZyVTqp0CU8iVC1wH88Py95LNRJdHaIL2J1HI')
worksheet = sh.sheet1
worksheet.delete_rows(2, 30)
