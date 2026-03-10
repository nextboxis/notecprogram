
#include<iostream.h>
#include<conio.h>
void main() {
inta,b,c,d,e,f,g,h,units;
clrscr();
cout<<"\n Electricity Bill Calculation";
cout<<"\n Enter the units consumed:";
cin>>units;
if(units<=100) {
cout<<"\n There is no charge";
} else if(units>100 && units <=200) {
a=units-100;
b=a^{*}1.5;
cout<<"\n Your EB Bill:"<<; }
else if(units>200 && units<=500) {
a=units-100;
b=a-100;
c=100*2;
d=b*3;
e=c+d;
cout<<"\n Your EB bill :"<<e;
} else if(units>500) {
a=units-100;
b=a-100;
$c=100^{*}3.5;
d=b*4.6;
e=a-b;
f=e^{*}6.6;
h=c+d+f
cout<<"\n Your EB bill:"<<h;
}else{
cout<<"\n Error in units";
} getch(); }
