using System;
using Microsoft.VisualStudio.TestTools.UnitTesting;
using SwinAdventure;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SwinAdventure.Tests
{
    [TestClass()]
    public class LookCommandTests
    {
        [TestMethod()]
        public void TestLookAtMe()
        {
            Player TestPlayer = new Player("Adeepa", "Test");

            LookCommand TestLook = new LookCommand();

            Console.WriteLine(TestLook.Execute(TestPlayer, new string[3] { "look", "at", "me" }));
            Assert.IsTrue(TestLook.Execute(TestPlayer, new string[3] { "look", "at", "me" }) == TestPlayer.LongDesc);
        }

        [TestMethod()]
        public void TestLookAtGem()
        {
            Player TestPlayer = new Player("Adeepa", "Test");
            Item TestItem = new Item(new string[] { "gem", "Shiny" }, "gem", "A Shiny gem");

            TestPlayer.Inventory.PutItem(TestItem);

            LookCommand TestLook = new LookCommand();

            Console.WriteLine(TestLook.Execute(TestPlayer, new string[3] { "look", "at", "gem" }));

            Assert.IsTrue(TestLook.Execute(TestPlayer, new string[3] { "look", "at", "gem" }) == TestItem.LongDesc);
        }

        [TestMethod()]
        public void TestLookAtUnk()
        {
            Player TestPlayer = new Player("Adeepa", "Test");
            Item TestItem = new Item(new string[] { "baked", "potato" }, "Gem", "A Shiny Gem");

            TestPlayer.Inventory.PutItem(TestItem);

            LookCommand TestLook = new LookCommand();

            Assert.IsFalse(TestLook.Execute(TestPlayer, new string[5] { "look", "at", "gem", "in", "TestPlayer" }) == TestItem.LongDesc);
        }

        [TestMethod()]
        public void TestLookAtGemInMe()
        {
            Player TestPlayer = new Player("Adeepa", "Test");
            Item TestItem = new Item(new string[] { "baked", "potato" }, "Gem", "A Shiny Gem");

            TestPlayer.Inventory.PutItem(TestItem);
            LookCommand TestLook = new LookCommand();
            Assert.IsTrue(TestLook.Execute(TestPlayer, new string[5] { "look", "at", "potato", "in", "me" }) == TestItem.LongDesc);

        }

        [TestMethod()]
        public void TestLookAtGemInBag()
        {
            Player TestPlayer = new Player("Adeepa", "Test");
            Item TestItem = new Item(new string[] { "gem", "Shiny" }, "Gem", "A Shiny Gem");
            Bag TestBag = new Bag(new string[] { "bag", "test" }, "Test Bag", "A Testing Bag");

            TestBag.Inventory.PutItem(TestItem);
            TestPlayer.Inventory.PutItem(TestBag);

            LookCommand TestLook = new LookCommand();

            Assert.IsTrue(TestLook.Execute(TestPlayer, new string[5] { "look", "at", "gem", "in", "bag" }) == TestItem.LongDesc);
        }

        [TestMethod()]
        public void TestLookAtGemInNoBag()
        {
            Player TestPlayer = new Player("Adeepa", "Test");
            Item TestItem = new Item(new string[] { "gem", "Shiny" }, "Gem", "A Shiny Gem");
            Bag TestBag = new Bag(new string[] { "bag", "test" }, "Test Bag", "A Testing Bag");

            TestBag.Inventory.PutItem(TestItem);
            TestPlayer.Inventory.PutItem(TestBag);
            LookCommand TestLook = new LookCommand();

            Assert.IsTrue(TestLook.Execute(TestPlayer, new string[5] { "look", "at", "gem", "in", "nobag" }) == "i cannot find the nobag");

        }

        [TestMethod()]
        public void TestLookAtNoGemInBag()
        {
            Player TestPlayer = new Player("Adeepa", "Test");
            Item TestItem = new Item(new string[] { "potato", "Shiny" }, "Gem", "A Shiny Gem");
            Bag TestBag = new Bag(new string[] { "bag", "test" }, "Test Bag", "A Testing Bag");

            TestBag.Inventory.PutItem(TestItem);
            TestPlayer.Inventory.PutItem(TestBag);

            LookCommand TestLook = new LookCommand();

            Assert.IsTrue(TestLook.Execute(TestPlayer, new string[5] { "look", "at", "gem", "in", "bag" }) == "i cannot find the gem in bag");
        }

        [TestMethod()]
        public void TestInvalidLook()
        {
            Player TestPlayer = new Player("TestPlayer", "For testing");
            LookCommand TestLook = new LookCommand();

            Assert.IsTrue(TestLook.Execute(TestPlayer, new string[1] { "hello" }) == "i don't know how to look like that");
        }
    }
}
