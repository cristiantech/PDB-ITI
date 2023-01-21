#Estrcuturas condicionales
#If else elif

#Numero par 

num1 = int(input("ingrese un numero "))

if num1 % 2 == 0 :
    print(f"el numero {num1} ingresado es par\n")
else:
    print(f"el numero {num1} ingresado es impar")


# Ejercicios biciesto

anio = int(input("Ingrese un año "))

if anio % 4 == 0:
    if anio % 100 == 0:
        if anio % 400 == 0:
            print(f"el año ingresado {anio} no es bisiesto")
        else:
            print(f"el año ingresado {anio} no es bisiesto")
    else:
        print(f"el año ingresado {anio} es bisiestor")
else:
    print(f"el año ingresado {anio} no es bisiestor")