ops = ["7","-8","9","R","D","10","+","+"]

#define templist
templist = list()
for index, i in enumerate(ops):
    #if integer
    try:
        templist.append(int(i))
    #if operator or string

    excecpt ValueError:
    if str(i) == "R":
        templist.pop()
    if str(i) =="D":
        templist.append(int(templist[-1])*2) 
    if str(i) =="+":
        templist.append(int(templist[-1])+ int(templist[-2]))       

    print(sum(templist))    

