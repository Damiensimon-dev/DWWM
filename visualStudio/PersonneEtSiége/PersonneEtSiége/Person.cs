using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace PersonneEtSiége
{
    class Person
    {
        string _lastName;
        string _firstName;
        int _age;
        bool _isStandingUp;

        public string LastName
        {
            get { return _lastName; }
            private set { _lastName = value; }
        }

        public string FirstName
        {
            get { return _firstName; }
            private set { _firstName = value; }
        }

        public int Age
        {
            get { return _age; }
            private set { _age = value; }
        }

        public bool IsStandingUp
        {
            get { return _isStandingUp; }
            private set { _isStandingUp = value; }
        }
        


    }
}
