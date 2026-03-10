3.BRANCH TESTING
#include<iostream.h>
#include<conio.h>
void main(){
int attend;
clrscr();
cout<<"\n Enter Attendance:";
cin>>attend;
if(attend> $>=75$ && attend< $\epsilon=100$) {
cout<<"\nYou are in PROFORMA I ";
cout<<"\nYou are eligible to write all the exams";
}else if (attend> $=65$ && attend<=74) {
cout<<"\n You are in PROFORMA II";
cout<<"\n You are allowed to write the exam with the permission of the
 principal."; }
else if (attend> $>=55$ && attend<=64) {
cout<<"\n You are in PROFORMA III";
cout<<"\n You can't write current semester but you can write arrear
 exam";
}else if (attend<=54) {
cout<<"\n You are in PROFORMA IV";
cout<<"\n Not continue to study need to rejoin the course in the next
 year"; } Else {
cout<<"\nInvalid input"; }
getch(); }
