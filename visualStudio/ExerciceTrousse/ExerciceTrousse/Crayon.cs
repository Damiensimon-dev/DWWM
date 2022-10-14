using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ExerciceTrousse
{
    abstract class Crayon : OutilEcriture
    {
        private bool _pointeDeMineATailler;

        public void Tailler()
        {

        }

        public new void Ecrire()
        {

        }

        public bool PointeDeMineATailler
        {
            get { return _pointeDeMineATailler; }
            private set { _pointeDeMineATailler = value; }
        }


    }
}
