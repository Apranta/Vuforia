using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class wisataHandler : MonoBehaviour {

    public GameObject[] objekWisata;
    public GameObject position;
    public static wisataHandler instance;

    private GameObject wisataActive;

    void Awake()
    {
        if (instance == null)
            instance = this;
        else if (instance != this)
            Destroy(gameObject);
    }

    public void create(int i)
    {
        wisataActive = objekWisata[i];
        Instantiate(wisataActive,position.transform);
    }

    public void tutup()
    {
        Destroy(wisataActive);
        try
        {
            Destroy(wisataActive);
        }
        catch
        {

        }
    }
}
