class Aprendiz:
    
    c=0
    
    def __init__(self, nombreAprendiz):
        self.nombreAprendiz=nombreAprendiz
        self.computadoras = []
        self.__class__.c+=1
    
    def getNombreAprendiz(self):
        return self.nombreAprendiz
    
    def setNombreAprendiz(self, nombreAprendiz):
        self.nombreAprendiz = nombreAprendiz
    
    def agregarComputadora(self,computadora):
        self.computadoras.append(computadora)
        
    def verComputadoras(self):
        return self.computadoras