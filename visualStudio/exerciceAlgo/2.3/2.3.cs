using System;

namespace _2._3
{
    class Program
    {
        static void Main(string[] args)
        {
            Random random = new Random();
            int n = random.Next(0, 100);
            int nombreDeNotreUtilisateur;
            bool echec = true;

            do
            {
                Console.WriteLine("Saisir un entier entre 0 et 100");
                nombreDeNotreUtilisateur = int.Parse(Console.ReadLine());

                if (nombreDeNotreUtilisateur > 0 && nombreDeNotreUtilisateur < 100)
                {
                    if (nombreDeNotreUtilisateur == n)
                    {
                        Console.WriteLine("Vous Gagné des pommes !!!!!!");
                    }
                    else
                    {
                        if (nombreDeNotreUtilisateur < n)
                        {
                            Console.WriteLine("C'est plus");
                        }
                        else
                        {
                            Console.WriteLine("C'est moins");
                        }
                    }
                }
                else
                {
                    Console.WriteLine("Saisir un nombre dans la bonne plage de valeur, SVP!!!!");
                }
            } while (echec);

        }
    }
}
