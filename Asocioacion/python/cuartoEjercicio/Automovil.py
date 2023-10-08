#Importe de la clase padre
import Automotor as au

class Automovil(au.Automotor):
    
    c = 0
    
    def __init__(self, marca, modelo ,precio, tipo, color):
        super().__init__(marca, modelo, precio)
        self.tipo = tipo
        self.color = color
        
    #Tipo del Automovil
    def getTipo(self):
        return self.tipo
    
    def setTipo(self, tipo):   
        self.tipo = tipo
        
    #Color del AUtomovil
    def getColor(self):
        return self.color

    def setColor(self, color):
        self.color = color
        
    #Mostrar datos del automovil    
    def mostrarDatos(self):
        print('AUTOMOVILES')
        print('-'*50)
        print(f'La marca del automotor es: {self.marca}')
        print(f'El modelo del automotor es: {self.modelo}')
        print(f'El precio del automotor es: {self.precio}')  
        print(f'El tipo de automovil es: {self.tipo}')
        print(f'El color del automovil es: {self.color}')        