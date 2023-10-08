class Aeronave:
    
    c = 0
    
    def __init__(self, numMatricula, nombreOperador, fabricanteNave, modeloNave):
        self.numMatricula = numMatricula
        self.nombreOperador = nombreOperador
        self.fabricanteNave = fabricanteNave
        self.modeloNave = modeloNave
        self.__class__.c+=1
        
    #Numero de matricula
    
    def getNumMatricula(self):
        return self.numMatricula
    
    def setNumMatricula(self,numMatricula):
        self.numMatricula = numMatricula
        
    #Nombre de operador
    
    def getNombreOperador(self):
        return self.nombreOperador
    
    def setNombreOperador(self, nombreOperador):
        self.nombreOperador = nombreOperador
        
    #Fabricante de la nave
    
    def getFabricanteNave(self):
        return self.fabricanteNave
    
    def setFabricanteNave(self,fabricanteNave):
        self.fabricanteNave = fabricanteNave
        
    #Modelo de la nave
    
    def getModeloNave(self):
        return self.modeloNave
    
    def setModeloNave(self, modeloNave):
        self.modeloNave = modeloNave
        