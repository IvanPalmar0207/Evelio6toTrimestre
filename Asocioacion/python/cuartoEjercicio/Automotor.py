class Automotor:
    
    c = 0
    
    def __init__(self, marca, modelo, precio):
        self.marca = marca
        self.modelo = modelo
        self.precio = precio
        self.__class__.c+=1
     
    #Marca del automotor 
    def getMarca(self):
        return self.marca
    
    def setMarca(self, marca):
        self.marca = marca
        
    #Modelo del automotor
    def getModelo(self):
        return self.modelo
    
    def setModelo(self, modelo):
        self.modelo = modelo
        
    #Precio del automotor
    def getPrecio(self):
        return self.precio
    
    def setPrecio(self, precio):
        self.precio = precio
        
    #Metodo de saludar
    def saludarAutomotor(self):
        print('AUTOMOTORES')
        print('-'*50)
        print(f'La marca del automotor es: {self.marca}')
        print(f'El modelo del automotor es: {self.modelo}')
        print(f'El precio del automotor es: {self.precio}')                        