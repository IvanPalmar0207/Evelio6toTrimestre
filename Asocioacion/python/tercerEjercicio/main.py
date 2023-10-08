#Clases Vuelo, Piloto y Aeronave
import Aeronave as ar
import Vuelo as vl
import Piloto as pl

#Instancias de la clase Aeronave
aeronave1 = ar.Aeronave('SOS097','Avianca','Airbus',2005)
aeronave2 = ar.Aeronave('AGF091','Wingo','Boeing',2010)

#Instancias de Vuelo
vuelo1 = vl.Vuelo('Puerto 1','Puerto 500','25/09/2023','10am')
vuelo2 = vl.Vuelo('Puerto 20','Puerto 2','29/09/2023','9:15am')
vuelo3 = vl.Vuelo('Puerto 5','Puerto 40','10/04/2023','12am')

#Instancias de Piloto
piloto1 = pl.Piloto('Lionel Andres Messi Cuchitini')

#Metodo de agregar aeronaves
piloto1.agregarAeronave(aeronave1)
piloto1.agregarAeronave(aeronave2)

#Metodo de agregar vuelos
piloto1.agregarVuelo(vuelo1)
piloto1.agregarVuelo(vuelo2)
piloto1.agregarVuelo(vuelo3)

#Visualizacion de vuelos y aeronaves

print('                   AEROPUERTO EL DORADO')
print()
print('El piloto es: ',piloto1.getNombrePiloto(),'\n')
print('Las aeronaves del piloto son:')
print('-'*60)

c=0
for i in piloto1.verAeronave():
    c+=1
    print(f'Aeronave Numero {c}:',i.getNumMatricula(),i.getNombreOperador(),i.getFabricanteNave(),i.getModeloNave())
print('-'*60,'\n')    

print('Los vuelos del piloto son: ')
print('-'*60)

c1 = 0
for i in piloto1.verVuelo():
    c1 += 1
    print(f'Vuelo Numero {c1}: ',i.getPuertoOrigen(),i.getPuertoDestino(),i.getFechaVuelo(),i.getHoralVuelo())
print('-'*60)    