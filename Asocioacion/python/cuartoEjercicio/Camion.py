#Importe de la clase padre
import Automotor as au

class Camion(au.Automotor):
    c = 0
    def __init__(self, marca, modelo, precio, numeroEjes, capacidadCarga):
        super().__init__(marca, modelo, precio)
        self.numeroEjes = numeroEjes
        self.capacidadCarga = capacidadCarga
       
    #Numero de ejes 
    def getNumeroEjes(self):
        return self.numeroEjes
    
    def setNumeroEjes(self, numeroEjes):
        self.numeroEjes = numeroEjes
        
    #Capacidad de carga
    def getCapacidadCarga(self):
        return self.capacidadCarga
    
    def setCapacidadCarga(self, capacidadCarga):
        self.capacidadCarga = capacidadCarga
        
    #Mostrar datos del camion
    def mostrarDatos(self):
        print('CAMIONES')
        print('-'*50)
        print(f'La marca del automotor es: {self.marca}')
        print(f'El modelo del automotor es: {self.modelo}')
        print(f'El precio del automotor es: {self.precio}')  
        print(f'El numero de ejes del camion son: {self.numeroEjes}')
        print(f'La capacidad de carga del camion es de: {self.capacidadCarga} toneladas')                