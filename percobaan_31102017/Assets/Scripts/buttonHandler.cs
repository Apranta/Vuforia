using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;
using UnityEngine.UI;

public class buttonHandler : MonoBehaviour {

    public GameObject contactObj;
    public GameObject beritaObj;
    bool showContact;
    bool showBerita;
	// Use this for initialization
	void Start () {
        showContact = false;
        showBerita = false;
	}
	
	// Update is called once per frame
	void Update () {
        contactObj.SetActive(showContact);
        beritaObj.SetActive(showBerita);
	}

    public void wisata()
    {
        SceneManager.LoadScene("percobaan_1");
    }

    public void kontak()
    {
        if (showBerita)
            showBerita = false;
        showContact = !showContact;
    }

    public void berita()
    {
        beritaHandler.instance.createBerita();
        if (showContact)
            showContact = false;
        showBerita = !showBerita;
    }
}
