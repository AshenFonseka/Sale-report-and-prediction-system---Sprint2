# include <stdio.h>
#include <stdlib.h>
#include <time.h>

void Sort(int w[], int size);
void PrintScreen(int v[], int size);


int main()
{
    int v, w;

    int a1[20] = {1,3,5,7,88,7,3,9,4,1,55,32,34,77,88,99,12,43,67,8}; //duplication

    int a2[20] = {1,33,2,5,9,7,8,90,55,78,47,14,17,24,22,52,3,23,32,87 };  //non duplication

    int a3[20] = {99,88,77,66,55,44,33,22,21,19,18,17,16,15,14,13,12,10,9,8};  //non duplic descending 

    int a4[20] = { 1, 2, 4, 6, 7, 8, 9, 11, 13, 15, 16, 18, 19, 20, 22, 33, 35, 38, 40, 42 }; //non dupli ascending

    int a5[20] = { 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 30, 32, 36, 38, 40, 46, 48 }; //non dupli even ascending

    int a6[20] = { 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 25, 27, 29, 31, 33, 35, 37, 39, 41 }; //non dupli odd ascending

    int a7[20] = { 99, 87, 87, 75, 68, 53, 23, 78, 90, 67, 8, 8, 78, 18, 36, 39, 44,};  //empty set dupli

    int a8[20] = { 32, 34, 33, 45, 4, 56, 76, 74, 676, 78, 67, 88, 99, 66, 55, 97, 89,}; //empty set non dupli

    int a9[20] = { 4, 9, 16, 25, 36, 49, 64, 81, 100, 121, 144, 169, 196, 225, 256, 289, 324, 361, 400 }; //non dupli multiplication of 2

    int a10[20] = { 5, 10, 15, 20, 25, 35, 40, 45, 50, 55, 60, 70, 75, 80, 85, 90, 95,}; //empty set divisible by 5


    PrintScreen(a1, 20);
    Sort(a1, 20);

    PrintScreen(a2, 20);
    Sort(a2, 20);

    PrintScreen(a3, 20);
    Sort(a3, 20);

    PrintScreen(a4, 20);
    Sort(a4, 20);

    PrintScreen(a5, 20);
    Sort(a5, 20);

    PrintScreen(a6, 20);
    Sort(a6, 20);

    PrintScreen(a7, 20);
    Sort(a7, 20);

    PrintScreen(a8, 20);
    Sort(a8, 20);

    PrintScreen(a9, 20);
    Sort(a9, 20);

    PrintScreen(a10, 20);
    Sort(a10, 20);

}

void PrintScreen(int v[], int size)
{
    printf("\n\n input: \n");
    for (int k = 0; k < size; k++)
    {
        printf("%d\t", v[k]);
    }
}

void Sort(int w[], int size)
{

    int k, l, m;

    for (k = 0; k < size; k++)

    {

        int min, temp;
        min = k;
        for (m = k + 1; m < size; ++m)
        {
            if (w[m] < w[min])
                min = m;
        }
        temp = w[k];
        w[k] = w[min];
        w[min] = temp;
    }

    for (k = 0; k < size; k++)
    {
        for (m = k + 1; m < size; m++)
        {

            if (w[k] == w[m])
            {

                for (l = m; k < size; l++)
                {
                    w[l] = w[l + 1];
                }

                size--;

                m--;
            }
        }
    }

    printf("\n outpput: \n");
    for (k = 0; k < size; k++)
    {
        printf("%d\t", w[k]);
    }
}
