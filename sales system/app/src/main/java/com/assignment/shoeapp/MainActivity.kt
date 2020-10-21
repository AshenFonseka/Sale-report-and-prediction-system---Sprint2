package com.assignment.shoeapp

import android.app.Activity
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.util.Log
import kotlinx.android.synthetic.main.activity_main.*

class MainActivity : AppCompatActivity() {

    private val ShoeDetailRequestCode = 999
    private val shoeList:MutableList<DataShoe> = mutableListOf()
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        cl_1.setOnClickListener { openShoeDetail(1) }
        cl_2.setOnClickListener { openShoeDetail(2) }
        cl_3.setOnClickListener { openShoeDetail(3) }
        cl_4.setOnClickListener { openShoeDetail(4) }

        shoeList.let {
            it.add(DataShoe(
                "Adidas 2.0","Adidas","23/04/2020",2
            ))
            it.add(DataShoe(
                "Nike Running","Nike","23/02/2019",5
            ))
            it.add(DataShoe(
                "Puma elasticiy","Puma","23/04/2020",4
            ))
            it.add(DataShoe(
                "Reebok Blue","Reebok","23/04/2020",1
            ))
        }

        showData()
    }

    private fun openShoeDetail(itemNumber:Int){
        val intent = Intent(this,Activity_ShoeDetail::class.java)
        intent.putExtra("editshoe",shoeList[itemNumber-1])
        intent.putExtra("itemNumber",itemNumber)
        startActivityForResult(intent,ShoeDetailRequestCode)
    }

    private fun showData(){
        shoeList[0].run {
            tv_name_1.text = shoeName
            tv_stars_1.text = stars.toString()
        }
        shoeList[1].run {
            tv_name_2.text = shoeName
            tv_stars_2.text = stars.toString()
        }
        shoeList[2].run {
            tv_name_3.text = shoeName
            tv_stars_3.text = stars.toString()
        }
        shoeList[3].run {
            tv_name_4.text = shoeName
            tv_stars_4.text = stars.toString()
        }
    }

    override fun onActivityResult(requestCode: Int, resultCode: Int, data: Intent?) {
        super.onActivityResult(requestCode, resultCode, data)

        if(requestCode==ShoeDetailRequestCode){
            if(resultCode== Activity.RESULT_OK){
                if(data!=null){
                    val updatedShoeRecord = data.getParcelableExtra<DataShoe>("editshoe")
                    val itemNumber = data.getIntExtra("itemNumber",0)
                    shoeList[itemNumber-1] = updatedShoeRecord

                    Log.d("shoe","updated shoe:${updatedShoeRecord}")

                    showData()
                }
            }
        }
    }
}
