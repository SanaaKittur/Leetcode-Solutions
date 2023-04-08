int getvalue(const char *s)
{
    switch(*s)
    {
        case 'I': return (s[1]=='V' || s[1]=='X') ? -1 : 1;
        case 'V': return 5;
        case 'X': return (s[1]=='L' || s[1]=='C') ? -10 : 10;
        case 'L': return 50;
        case 'C': return (s[1]=='D' || s[1]=='M') ? -100 : 100;
        case 'D': return 500;
        case 'M': return 1000;
    }
    return 0;
}

int romanToInt(char * s)
{
    int result = 0;
    for(;*s != '\0';++s)
    {
        result+= getvalue(s);
    }
    return result;
}
