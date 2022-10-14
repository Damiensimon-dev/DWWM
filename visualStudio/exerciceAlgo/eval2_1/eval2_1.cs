using System;

namespace eval2_1
{
    class Program
    {
        static void Main(string[] args)
        {
            int numeroDuMoisDeNaissance;

            Console.WriteLine("Saisir votre mois de naissance en nombre (exemple : 5 pour mai)");

            do
            {
                
                numeroDuMoisDeNaissance = int.Parse(Console.ReadLine());

                if (numeroDuMoisDeNaissance < 1 || numeroDuMoisDeNaissance > 12)
                {
                    Console.WriteLine("UNE ERREUR A ETAIT COMMISSE !!! : Saisir votre mois de naissance en nombre (exemple : 5 pour mai)");
                }
                else
                {
                    if (numeroDuMoisDeNaissance >= 1 && numeroDuMoisDeNaissance < 2)
                    {
                        Console.WriteLine($"{numeroDuMoisDeNaissance} c'est janvier");
                    }
                    if (numeroDuMoisDeNaissance >= 2 && numeroDuMoisDeNaissance < 3)
                    {
                        Console.WriteLine($"{numeroDuMoisDeNaissance} c'est Février");
                    }
                    if (numeroDuMoisDeNaissance >= 3 && numeroDuMoisDeNaissance < 4)
                    {
                        Console.WriteLine($"{numeroDuMoisDeNaissance} c'est Mars");
                    }
                    if (numeroDuMoisDeNaissance >= 4 && numeroDuMoisDeNaissance < 5)
                    {
                        Console.WriteLine($"{numeroDuMoisDeNaissance} c'est Avril");
                    }
                    if (numeroDuMoisDeNaissance >= 5 && numeroDuMoisDeNaissance < 6)
                    {
                        Console.WriteLine($"{numeroDuMoisDeNaissance} c'est Mai");
                    }
                    if (numeroDuMoisDeNaissance >= 6 && numeroDuMoisDeNaissance < 7)
                    {
                        Console.WriteLine($"{numeroDuMoisDeNaissance} c'est Juin");
                    }
                    if (numeroDuMoisDeNaissance >= 7 && numeroDuMoisDeNaissance < 8)
                    {
                        Console.WriteLine($"{numeroDuMoisDeNaissance} c'est Juillet");
                    }
                    if (numeroDuMoisDeNaissance >= 8 && numeroDuMoisDeNaissance < 9)
                    {
                        Console.WriteLine($"{numeroDuMoisDeNaissance} c'est Aout");
                    }
                    if (numeroDuMoisDeNaissance >= 9 && numeroDuMoisDeNaissance < 10)
                    {
                        Console.WriteLine($"{numeroDuMoisDeNaissance} c'est Septembre");
                    }
                    if (numeroDuMoisDeNaissance >= 10 && numeroDuMoisDeNaissance < 11)
                    {
                        Console.WriteLine($"{numeroDuMoisDeNaissance} c'est Octobre");
                    }
                    if (numeroDuMoisDeNaissance >= 11 && numeroDuMoisDeNaissance < 12)
                    {
                        Console.WriteLine($"{numeroDuMoisDeNaissance} c'est Novembre");
                    }
                    if (numeroDuMoisDeNaissance >= 12 && numeroDuMoisDeNaissance < 13)
                    {
                        Console.WriteLine($"{numeroDuMoisDeNaissance} c'est Décembre");
                    }
                }

                


                
            } while (numeroDuMoisDeNaissance < 1 || numeroDuMoisDeNaissance > 12);

            
        }
    }
}
