using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using LitJson;
using UnityEngine.UI;

public class headlineBerita : MonoBehaviour {

    Text[] id_berita;
    string id;
    public string url;
    public string jsonString;
    // Use this for initialization

    void Start () {
        id_berita = gameObject.GetComponentsInChildren<Text>(true);
        id = id_berita[1].text.ToString();
        url = "http://localhost/vuforia/api/getberita/" + id;
        StartCoroutine(DownloadTest(url));
    }
	
	// Update is called once per frame
	void Update () {
		
	}

    private IEnumerator DownloadTest(string url)
    {
        WWW www = new WWW(url);
        yield return www;
        jsonString = www.text;
    }

    public void showBerita()
    {
        JsonData jsonvale = JsonMapper.ToObject(jsonString);
        isiBerita.instance.showState = true;
        isiBerita.instance.setBerita(jsonvale["judul_berita"].ToString(), jsonvale["isi_berita"].ToString());
        Debug.Log("Judul Berita: " + jsonvale["judul_berita"]);
    }
}
