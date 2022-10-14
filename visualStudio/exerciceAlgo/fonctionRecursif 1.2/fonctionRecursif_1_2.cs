using System;

namespace fonctionRecursif_1._2
{
    class Program
    {
        static void Main(string[] args)
        {
            
            Console.WriteLine($"le resultat de nombre un et nombre deux est de : { CalculNombreEntier(-10, 20)}");
        }

        public static int CalculNombreEntier(int nombreUn, int nombreDeux) 
        {
            if (nombreDeux > 0)
            {
                nombreUn++;
                nombreDeux--;
            
                if (nombreDeux == 0)
                {
                    return nombreUn;
                }
            
                else
                {
                    return CalculNombreEntier(nombreUn, nombreDeux);
                }
            }

            else
            {
                nombreUn--;
                nombreDeux++;
            }

            if (nombreDeux == 0)
            {
                return nombreUn;
            }

            else
            {
                return CalculNombreEntier(nombreUn, nombreDeux);
            }
        }
    }
}
