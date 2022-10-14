using System;

namespace _2_10PalindromeFonctionRecursif
{
    class Program
    {
        static void Main(string[] args)
        {
            
        }
        private static string PalindromeFonctionRecursif(string saisie,int debut, int fin)
        {
            if (saisie [debut] == saisie[fin])
            {
                debut++;
                fin--;
            }
        }
    }
}
