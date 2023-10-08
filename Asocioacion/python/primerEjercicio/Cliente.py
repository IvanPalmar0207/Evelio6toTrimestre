class Cliente:
    c = 0
    def __init__(self, nombreCliente):
        self.nombreCliente = nombreCliente
        self.mediosPago = []
        self.__class__.c+=1

    #Nombre del Cliente

    def getNombreCliente(self):
        return self.nombreCliente
    
    def setNombreCliente(self,nombreCliente):
        self.nombreCliente = nombreCliente
        
    #Metodo de agregacion y visualizacion de metodos de pago
        
    def agregarMetodo(self,medioPago):
        self.mediosPago.append(medioPago)

    def getMediosPago(self):
        return self.mediosPago