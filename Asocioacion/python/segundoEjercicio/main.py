#Importe de las clases Aprendiz y Computador
import Aprendiz as ap
import Computador as cm

#Instanciacion de objetos de la clase Aprendiz
aprendiz1 = ap.Aprendiz('Ivan David Palmar Martinez')

#Intanciacion de objetos de la clase Computadora
computador1 = cm.Computadora('Ryzen 7','AMD','Ram DIMM',5,'Solido',500)
computador2 = cm.Computadora('Ryzen 5','AMD','Ram DIMM',6,'Solido',1000)
computador3 = cm.Computadora('iCore 5','Intel','Ram SODIMM',10,'Externo',300)

#Metodo de agregar computadoras

aprendiz1.agregarComputadora(computador1)
aprendiz1.agregarComputadora(computador2)
aprendiz1.agregarComputadora(computador3)

#Visualizacion de las computadoras
print('Computadoras por Aprendiz')
print()
print('El nombre del aprendiz es: ',aprendiz1.getNombreAprendiz())
print('-'*50)

for i in aprendiz1.verComputadoras():
    print(i.getTipoProcesador(),
          i.getMarcaProcesador(),
          i.getTipoMemoria(),i.getCapMemoria(),
          i.getTipoAlmacenamiento(),
          i.getCapAlmacenamiento())

print('-'*50)