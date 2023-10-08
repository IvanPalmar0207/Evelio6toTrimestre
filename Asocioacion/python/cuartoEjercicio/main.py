#Importe de las Clases
import Automovil as al
import Camion as cm

#Instancias de Automovil
automovil1 = al.Automovil('Mazda',1997,150000000.0,'Convertible','Naranja y verde')

#Visualizacion de Automovil
automovil1.mostrarDatos()

print('-'*50)

#Instancias de Camion
camion1 = cm.Camion('Caterpillar',2005,500000000.0,10,10)

#Visualizacion de Camion
camion1.mostrarDatos()