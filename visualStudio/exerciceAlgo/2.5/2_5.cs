using System;

namespace _2._5
{
    class Program
    {
        static void Main(string[] args)
        {
             
            int userChoise;
            int countUser = 0;
            int countComputer = 0;

            do
            {
                Random random = new Random();
                int computerChoise = random.Next(0, 3);

                Console.WriteLine("choose a move play between 0 ,1 or 2. Enter a negative number to quit");
                userChoise = int.Parse(Console.ReadLine());

                if (userChoise < 0)
                {
                    Environment.Exit(0);
                }
                else
                {
                    Console.WriteLine($"Computer choice was : {computerChoise}");

                    ItsTimeToDuel(userChoise, ref countUser, computerChoise, ref countComputer);

                    Console.WriteLine($"Computer score : {countComputer}; user score : {countUser}");
                }
            } while (CheckNoVictory(countUser, countComputer));

        }

        private static void ItsTimeToDuel(int _userChoise, ref int _countUser, int _computerChoise, ref int _countComputer)
        {
            int diff = _userChoise - _computerChoise;

            switch (diff)
            {
                case 2:
                    Console.WriteLine("Point to the user");
                    _countUser = _countUser + 1;
                    break;
                case -2:
                    Console.WriteLine("Point to the computer");
                    _countComputer = _countComputer + 1;
                    break;
                case 1:
                    Console.WriteLine("Point to the computer");
                    _countComputer = _countComputer + 1;
                    break;
                case -1:
                    Console.WriteLine("Point to the user");
                    _countUser = _countUser + 1;
                    break;  
                default:
                    Console.WriteLine("Draw !!!");
                    break;
            }
        }

        private static bool CheckNoVictory(int _countUser, int _countComputer)
        {
            const int victoryScore = 10;

            if (_countUser == victoryScore)
            {
                Console.WriteLine("User wins !!!!");
                return false;
            }
            else
            {
                if (_countComputer == victoryScore)
                {
                    Console.WriteLine("Computer wins !!!!");
                    return false;
                }
                else
                {
                    return true;
                }
            }
        }
    }
}
