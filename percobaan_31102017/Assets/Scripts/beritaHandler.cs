using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class beritaHandler : MonoBehaviour {

    public GameObject headlinePosition;
    public GameObject headlineBerita;
    public float yPosition;
    Text[] newJudul;
    

    // Use this for initialization
    void Start () {
        createBerita();
    }
	
	// Update is called once per frame
	void Update () {
		
	}

    void createBerita()
    {
        float newPos = yPosition;
        WWW www = new WWW("http://localhost/vuforia/api");
        for (int i = 0; i < 3; i++)
        {
            headlineBerita.transform.position = new Vector3(headlineBerita.transform.position.x, 
                newPos - (i * 70), headlineBerita.transform.position.z);
            newJudul = headlineBerita.GetComponentsInChildren<Text>();
            newJudul[0].text = "Hari Telah Berganti " + i;
            Instantiate(headlineBerita, headlinePosition.transform);
            headlineBerita.transform.position = new Vector3(headlineBerita.transform.position.x, 
                yPosition, headlineBerita.transform.position.z);
        }
    }
}
