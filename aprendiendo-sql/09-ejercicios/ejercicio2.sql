/*
Modificar la comisione de los vendedores, y ponerla al 0.5% cuando
ganan mas de 5000
*/

update vendedores set comision=0.5 where sueldo >=50000;
