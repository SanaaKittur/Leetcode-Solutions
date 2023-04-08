bool isPalindrome(int x)
{
   long int rev = 0, rem;
   int temp = x;
   if(x<0)
   {
       return 0;
   }
   else
   {
       while(x>0)
       {
           rem = x % 10;
           rev = rev * 10 + rem;
           x /= 10;
       }
       return(temp == rev);
   }
}
