package com.assignment.shoeapp

import android.app.Activity
import android.app.DatePickerDialog
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.util.Log
import android.widget.Toast
import kotlinx.android.synthetic.main.activity__shoe_detail.*
import java.text.ParseException
import java.text.SimpleDateFormat
import java.util.*
import kotlin.math.roundToInt

class Activity_ShoeDetail : AppCompatActivity() {

    private var editshoe:DataShoe? = null
    private var itemNumber = 0
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity__shoe_detail)

        editshoe = intent.getParcelableExtra<DataShoe>("editshoe")
        editshoe?.run {
            e_shoe_name.setText(shoeName)
            e_shoe_brand.setText(shoeBrand)
            e_stars.rating = stars.toFloat()
            e_launch_date.setText(launchDate)
        }
        itemNumber = intent.getIntExtra("itemNumber",0)
    }

    override fun onBackPressed() {

        if(!valuesValid()){
            Toast.makeText(this,"Enter all values!",Toast.LENGTH_LONG).show()
        }else if(!validDate()){
            Toast.makeText(this,"Launch Date is not valid!",Toast.LENGTH_LONG).show()
        }else{
            editshoe?.apply {
                shoeName = e_shoe_name.text.toString()
                shoeBrand = e_shoe_brand.text.toString()
                stars = e_stars.rating.roundToInt()
                launchDate = e_launch_date.text.toString()
            }
            Log.d("shoe",editshoe.toString())
            val i = Intent()
            i.putExtra("editshoe",editshoe)
            i.putExtra("itemNumber",itemNumber)
            Toast.makeText(this,"saving...",Toast.LENGTH_SHORT).show()
            setResult(Activity.RESULT_OK,i)
            super.onBackPressed()
        }
    }
    private fun valuesValid(): Boolean {
        return !(e_shoe_name.text.isEmpty() ||
                e_shoe_brand.text.isEmpty() ||
                e_launch_date.text.isEmpty())
    }
    private fun validDate(): Boolean {
        return try {
            SimpleDateFormat("dd/MM/yyyy", Locale.getDefault()).parse(e_launch_date.text.toString())
            true
        }catch(e:ParseException){
            false
        }

    }
}
