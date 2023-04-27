import os

# membersihkan baris ke-2 hingga ke-4 dari tampilan console
print("Baris 1")
print("Baris 2")
print("Baris 3")
print("Baris 4")
print("Baris 5")

# membersihkan baris ke-2 hingga ke-4 dari tampilan console
os.system('\033[2;1H\033[2K')
os.system('printf "\033[3;1H\033[2K"')
os.system('printf "\033[4;1H\033[2K"')
