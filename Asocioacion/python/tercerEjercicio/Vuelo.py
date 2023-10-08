class Vuelo:
    
    c = 0
    
    def __init__(self,puertoOrigen, puertoDestino, fechaVuelo, horaVuelo):
        self.puertoOrigen = puertoOrigen
        self.puertoDestino = puertoDestino
        self.fechaVuelo = fechaVuelo
        self.horaVuelo = horaVuelo
        self.__class__.c+=1
    
    #Puerto de origen
        
    def getPuertoOrigen(self):
        return self.puertoOrigen
    
    def setPuertoOrigen(self, puertoOrigen):
        self.puertoOrigen = puertoOrigen
        
    #Puerto de destino 
    
    def getPuertoDestino(self):
        return self.puertoDestino
    
    def setPuertoDestino(self,puertoDestino):
        self.puertoDestino = puertoDestino
        
    #Fecha del vuelo
    
    def getFechaVuelo(self):
        return self.fechaVuelo
    
    def setFechaVuelo(self, fechaVuelo):
        self.fechaVuelo = fechaVuelo
    
    #Hora del vuelo
    
    def getHoralVuelo(self):
        return self.horaVuelo
    
    def setHoraVuelo(self, horaVuelo):
        self.horaVuelo = horaVuelo