using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;
using UnityEngine.UI;

public class buttonHandler : MonoBehaviour {

    public GameObject contactObj;
    public GameObject beritaObj;
    public GameObject wisataObj;
    bool showContact;
    bool showBerita;
    bool showWisata;
	// Use this for initialization
	void Start () {
        showContact = false;
        showBerita = false;
        showWisata = false;
	}
	
	// Update is called once per frame
	void Update () {
        contactObj.SetActive(showContact);
        beritaObj.SetActive(showBerita);
        wisataObj.SetActive(showWisata);
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

    public void wisata_btn()
    {
        showWisata = !showWisata;
    }

    public void berita()
    {
        beritaHandler.instance.createBerita();
        if (showContact)
            showContact = false;
        showBerita = !showBerita;
    }

    public void wisataAlam()
    {
        SceneManager.LoadScene("alam");
    }

    public void wisataBuatan()
    {
        SceneManager.LoadScene("buatan");
    }

    public void wisataSejarah()
    {
        SceneManager.LoadScene("sejarah-budaya");
    }
}
