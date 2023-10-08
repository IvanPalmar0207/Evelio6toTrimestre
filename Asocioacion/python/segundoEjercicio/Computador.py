class Computadora:
    
    c=0
    
    def __init__(self,tipoProcesador,marcaProcesador,tipoMemoria,capMemoria,tipoAlmacenamiento,capAlmacenamiento):
        self.tipoProcesador = tipoProcesador
        self.marcaProcesador = marcaProcesador
        self.tipoMemoria = tipoMemoria
        self.capMemoria = capMemoria
        self.tipoAlmacenamiento = tipoAlmacenamiento
        self.capAlmacenamiento = capAlmacenamiento
        self.__class__.c+=1
    
    #Tipo de procesado
        
    def getTipoProcesador(self):
        return self.tipoProcesador
    
    def setTipoProcesador(self, tipoProcesador):
        self.tipoProcesador = tipoProcesador
        
    #Marca del procesador 
    
    def getMarcaProcesador(self):
        return self.marcaProcesador
    
    def setMarcaProcesador(self,marcaProcesador):
        self.marcaProcesador = marcaProcesador
        
    #Tipo de memoria
    
    def getTipoMemoria(self):
        return self.tipoMemoria
    
    def setTipoMemoria(self, tipoMemoria):
        self.tipoMemoria = tipoMemoria
        
    #Capacidad de la memoria
    
    def getCapMemoria(self):
        return self.capMemoria
    
    def setCapMemoria(self, capMemoria):
        self.capMemoria = capMemoria
    
    #Tipo de almacenamiento
    
    def getTipoAlmacenamiento(self):
        return self.tipoAlmacenamiento
    
    def setTipoAlmacenamiento(self, tipoAlmacenamiento):
        self.tipoAlmacenamiento = tipoAlmacenamiento
    
    #Capacidad del almacenamiento
    
    def getCapAlmacenamiento(self):
        return self.capAlmacenamiento
    
    def setCapAlmacenamiento(self, capAlmacenamiento):
        self.capAlmacenamientoo = capAlmacenamiento        