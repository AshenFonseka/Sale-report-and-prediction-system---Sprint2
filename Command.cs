using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SwinAdventure
{
    public abstract class Command : IdentifiableObject
    {
        public Command() { }

        public Command(String[] ids)
        {
            foreach (string id in ids)
            {
                this.AddIdentifier(id);
            }
        }

        abstract public string Execute(Player p, string[] text);
    }
}
