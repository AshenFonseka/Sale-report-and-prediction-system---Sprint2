package com.assignment.bestshakes

import org.junit.Test

import org.junit.Assert.*

class ExampleUnitTest {
    @Test
    fun checkDate(){
        assertEquals(true,UpdateDrinkActivity.checkDateValidity("02/02/20"))
    }
}
