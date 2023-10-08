#Clases MetodoPago y Cliente
import MediosPago as md
import Cliente as cli

#Instancias de los Medios de pago
medioPago1 = md.MediosPago('Efectivo')
medioPago2 = md.MediosPago('Tarjeta de credito')

#Instancias de los clientes
cliente1 = cli.Cliente('Ivan')
cliente2 = cli.Cliente('Messi')
print('El numero de clientes registrados hasta el momento es de: ',cli.Cliente.c,'\n')

#Metodo de agregar medios de pago
cliente1.agregarMetodo(medioPago1)
cliente1.agregarMetodo(medioPago2)

cliente2.agregarMetodo(medioPago1)

#Visualizacion de los medios de pago
print('El nombre del cliente es:',cliente1.getNombreCliente(),'\n')
print('Sus metodos de pago son:')
for i in cliente1.getMediosPago():
    print(i.getnombreMedio())

print('-'*50,'\n')

print('El nombre del cliente es:',cliente2.getNombreCliente(),'\n')
print('Sus metodos de pago son:')
for i in cliente2.getMediosPago():
    print(i.getnombreMedio())