package com.assignment.shoeapp

import androidx.test.espresso.Espresso
import androidx.test.espresso.action.ViewActions.click
import androidx.test.espresso.action.ViewActions.replaceText
import androidx.test.espresso.assertion.ViewAssertions.matches
import androidx.test.espresso.matcher.ViewMatchers.*
import androidx.test.ext.junit.rules.ActivityScenarioRule
import androidx.test.platform.app.InstrumentationRegistry
import androidx.test.ext.junit.runners.AndroidJUnit4

import org.junit.Test
import org.junit.runner.RunWith

import org.junit.Assert.*
import org.junit.Rule

/**
 * Instrumented test, which will execute on an Android device.
 *
 * See [testing documentation](http://d.android.com/tools/testing).
 */
@RunWith(AndroidJUnit4::class)
class ExampleInstrumentedTest {
    companion object{
        const val newShoeName = "Reebok New Version"
    }
    @get:Rule
    var activityScenarioRule = ActivityScenarioRule(MainActivity::class.java)

    @Test
    fun useAppContext() {
        // Context of the app under test.
        val appContext = InstrumentationRegistry.getInstrumentation().targetContext
        assertEquals("com.assignment.shoeapp", appContext.packageName)
    }

    @Test
    fun testAllUI(){
        Espresso.onView(withId(R.id.cl_1)).perform(click())
        Espresso.onView(withId(R.id.cl_details_container)).check(matches(isDisplayed()))

        Espresso.onView(withId(R.id.e_shoe_name)).perform(replaceText(newShoeName))
        Espresso.pressBack()

        Espresso.onView(withId(R.id.tv_name_1)).check(matches(withText(newShoeName)))
    }
}
