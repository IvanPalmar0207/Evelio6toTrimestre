class MediosPago:
    
    c = 0
    
    def __init__(self,nombreMedio):
        self.nombreMedio = nombreMedio
        self.__class__.c=1
    
    #Nombre del medio de pago
    
    def getnombreMedio(self):
        return self.nombreMedio
    
    def setNombreMedio(self,nombreMedio):        
        self.nombreMedio = nombreMedio