class Piloto:
    
    c = 0
    
    def __init__(self, nombrePiloto):
        self.nombrePiloto = nombrePiloto
        self.vuelo = []
        self.aeronave = []
    
    #Nombre del piloto    
    
    def getNombrePiloto(self):
        return self.nombrePiloto
    
    def setNombrePiloto(self, nombrePiloto):
        self.nombrePiloto = nombrePiloto
        
    #Metodo de agregacion y visualizacion de vuelos
    
    def agregarVuelo(self, vuelo):
        self.vuelo.append(vuelo)
        
    def verVuelo(self):
        return self.vuelo
    
    #Metodo de agregacion y visualizacion de aeronaves
    
    def agregarAeronave(self,aeronave):
        self.aeronave.append(aeronave)
        
    def verAeronave(self):
        return self.aeronave