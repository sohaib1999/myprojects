#include<iostream>
#include<conio.h>
using namespace std;
class A
{
float a,b,c;
int n;
public:
void calculate()
{
cout<<"Enter first number ";
cin>>a;
cout<<"Enter second number ";
cin>>b;
cout<<"\nWhich operation do you want to perform \n 1.Addtion \n 2.Subtraction \n 3.Multiplication \n 4.Division\n";
cin>>n;
switch(n)
{
case 1:c=a+b;cout<<"\nAnswer is "<<c;break;
case 2:c=a-b;cout<<"\nAnswer is "<<c;break;
case 3:c=a*b;cout<<"\nAnswer is "<<c;break;
case 4:c=a/b;cout<<"\nAnswer is "<<c;break;
default:cout<<"\nInvalid input";
}
}
};
int main()
{
A calc;
calc.calculate();
getch();
return 0;
}
